# quilombo_digital

## Getting started

## Add your files

- [ ] [Create](https://docs.gitlab.com/ee/user/project/repository/web_editor.html#create-a-file) or [upload](https://docs.gitlab.com/ee/user/project/repository/web_editor.html#upload-a-file) files
- [ ] [Add files using the command line](https://docs.gitlab.com/ee/gitlab-basics/add-file.html#add-a-file-using-the-command-line) or push an existing Git repository with the following command:

```
cd existing_repo
git remote add origin https://gitlab.com/ifms-pesquisa/quilombo_digital.git
git branch -M main
git push -uf origin main
```


## Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) (MySQL)
- [PHP 8.x]() (já incluso no XAMPP)
- [Composer](https://getcomposer.org/Composer-Setup.exe)
- [Node.js](https://nodejs.org/en/download/) (Instalar versão LTS, .msi)
- [Git](https://git-scm.com/downloads) (for version control, caso não tenha instalado)

## Configure your project

- [ ] [Abra o visual studio na pasta do projeto - projetoWeb]()
- [ ] [Execute os comandos no terminal do Visual Studio]()
- [ ] [Crie o arquivo .env na raiz do projeto (use como base .env.example, mas não remova o .env.example)
  ]()
- [ ] [Provalmente se der erro no npm]()
```
composer install
composer key:generate
npm install
```

# Novas funcionalidades
```
git checkout -b feature/nome-branch
git add .
git commit -m "Comente o que voce fez"
git push origin feature/nome-branch
```

# Executar o projeto
```
php artisan serve
npm run dev
```

## Test and Deploy

Use the built-in continuous integration in GitLab.

- [ ] [Get started with GitLab CI/CD](https://docs.gitlab.com/ee/ci/quick_start/)

***



