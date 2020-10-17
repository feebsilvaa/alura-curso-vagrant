
# Comandos uteis

* Criar um Vagrantfile setando um box

  ```bash
    mkdir project_folder
    cd project_folder
    vagrant init hashicorp/bionic64
  ```

* Configurar e iniciar uma vm a partir de um Vagrantfile

  ```bash
    vagrant up
  ```

* Visualizar status de uma vm

  ```bash
    vagrant status
  ```

* Acessar uma vm através de ssh

  ```bash
    vagrant ssh
  ```

* Parar uma vm

  ```bash
    vagrant halt
  ```

* Recarregar configurações em uma vm

  ```bash
    vagrant reload
  ```

* Remover completamente uma vm

  ```bash
    vagrant destroy
  ```
