Chef::Log.info("Running deploy/before_symlink.rb...")
Chef::Log.info("Release path: #{release_path}")


# Map OpswOrk deploy attributes to the ones we need in deployment:
# http://docs.aws.amazon.com/opsworks/latest/userguide/attributes-json-deploy.html#attributes-json-deploy-app-db

# Set DB ENV from OpsWorks deploy node attributes
ENV['DB_HOST']= node[:deploy]['m2demo_prod'][:database][:host]
ENV['DB_NAME']= node[:deploy]['m2demo_prod'][:database][:database]
ENV['DB_USER']= node[:deploy]['m2demo_prod'][:database][:username]
ENV['DB_PASSWORD']= node[:deploy]['m2demo_prod'][:database][:password]

node[:deploy]['m2demo_prod']['environment_variables'].each {|key, value| ENV[key]=value }


Chef::Log.info("Environment Variables for Install Now are:")
Chef::Log.info(ENV)

# Dump environment for the offline installation script
file "#{release_path}/magento-environment.sh" do
  content ENV.reduce("#!/bin/bash\n") { |a, e| a + "export #{e[0]}=\"#{e[1]}\"\n" }
  mode '0775'
end

execute "Run composer" do
  user "deploy"
  cwd "#{release_path}"
  command "tools/composer.phar install"
  action :run
end

# execute "Load env vars" do
#   user "deploy"
#   cwd "#{release_path}"
#   command ". #{release_path}/magento-environment.sh"
#   action :run
# end

execute "Apply Magento Environment Settings" do
  user "deploy"
  cwd "#{release_path}"
  command "tools/apply.php '#{ENV['ENVIRONMENT']}' Configuration/settings.csv"
  action :run
end

# This .htaccess file confuses Apache if the webroot is pointing to pub
file "#{release_path}/.htaccess" do
  action :delete
end

file "#{release_path}/pub/version.txt" do
  action :create_if_missing
  content "Hello World! :)"
end

execute "Fix owner" do
  command "chown -R deploy.www-data #{release_path}/var #{release_path}/pub/media #{release_path}/pub/static"
end

execute "Fix permissions" do
  command "chmod -R ug+rws #{release_path}/var #{release_path}/pub/media #{release_path}/pub/static"
end