pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh 'ssh -p 50683 root@ssh.dsicari.com.br \'cd /var/www/dsicari && git pull origin master\''
      }
    }

  }
}