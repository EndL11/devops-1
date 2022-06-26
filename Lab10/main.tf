terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 3.0"
    }
  }
}

# Configure the AWS Provider
provider "aws" {}

# Create a VPC
resource "aws_instance" "web_server" {
  ami		 = "ami-08d4ac5b634553e16"
  instance_type  = "t2.micro"
  vpc_security_group_ids = [aws_security_group.instance.id]
  
  user_data = <<-EOF
  		#!bin/bash
  		sudo apt-get update
  		sudo apt-get install curl
  		sudo curl -fsSL https://get.docker.com/ | sh
  		mkdir ~/wordpress && cd ~/wordpress
  		sudo docker run -e MYSQL_ROOT_PASSWORD=wordpress -e MYSQL_DATABASE=wordpress -e MYSQL_USER=wordpressuser -e MYSQL_PASSWORD=root -p 90:90 -v "$PWD/html":/var/www/html -d endl11/app

  		EOF
  		
  tags = {
  	Name = "web_server"
  }
}

resource "aws_security_group" "instance" {
	name = "terraform"
	ingress {
		from_port   = 90
		to_port     = 90
		protocol    = "tcp"
		cidr_blocks = ["0.0.0.0/0"]
	}
}
