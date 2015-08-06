# -*- mode: ruby -*-
# vi: set ft=ruby :
VAGRANTFILE_API_VERSION = "2"
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "precise64"
  config.vm.hostname = "obelix"
  config.vm.provision :shell, :path => "scripts/script.sh"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  config.vm.network :public_network
  config.vm.synced_folder ".", "/vagrant", id: "vagrant-root",
    owner: "vagrant",
    group: "vagrant"
end
