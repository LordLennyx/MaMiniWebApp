pipeline {
  agent any
  stages {
    stage('Checkout') {
      steps {
        git branch: 'main', url: 'https://github.com/LordLennyx/MaMiniWebApp.git'
      }
    }
    stage('Build') {
      steps {
        echo 'Building...'
        // Ici vous mettez vos commandes de build, ex :
        // sh './build.sh' ou docker build -t monimage .
      }
    }
    stage('Test') {
      steps {
        echo 'Testing...'
        // Par exemple : sh './run_tests.sh'
      }
    }
    stage('Deploy') {
      steps {
        echo 'Deploying...'
        // Commandes pour déployer, ex : sh './deploy.sh'
      }
    }
  }
}
