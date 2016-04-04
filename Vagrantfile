# -*- mode: ruby -*-
# vi: set ft=ruby :
VAGRANTFILE_API_VERSION = "2"
	Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
	  config.vm.box = "precise64"
	  config.vm.hostname = "master-test-vagrant"
	  config.vm.provision :shell, :path => "scripts/script.sh"
	  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
	  config.vm.network "private_network", ip: "192.168.50.4"
	  config.vm.synced_folder ".", "/vagrant", id: "vagrant-root", owner: "vagrant", group: "vagrant"
		config.vm.provider "virtualbox" do |v|
  			v.name = "master-test-vagrant"
  			v.memory = 1024
  			v.cpus = 1
		
	  end
end
#This is the file which will fire the vm
