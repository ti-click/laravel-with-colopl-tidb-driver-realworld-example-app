
FROM gitpod/workspace-full

# install terraform
RUN sudo apt-get update && sudo apt-get install -y gnupg software-properties-common curl \
    && curl -fsSL https://apt.releases.hashicorp.com/gpg | sudo apt-key add - \
    && sudo apt-add-repository "deb [arch=amd64] https://apt.releases.hashicorp.com $(lsb_release -cs) main" \
    && sudo apt-get update && sudo apt-get install terraform

# RUN sudo apt install mysql-client -y

# install tiup
RUN curl --proto '=https' --tlsv1.2 -sSf https://tiup-mirrors.pingcap.com/install.sh | sh
RUN /home/gitpod/.tiup/bin/tiup install tidb:v6.1.1
