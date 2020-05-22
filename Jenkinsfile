pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'Hello!'
        sh 'ssh -p 50683 root@ssh.dsicari.com.br \'hostname\''
      }
    }

  }
}