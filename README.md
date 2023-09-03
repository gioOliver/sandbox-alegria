# Sandbox alegria

Projeto destinado a testes e mais testes de funcionalidades bacanas o bastante para serem
 documentadas mas pequenas demais para terem seu próprio projeto

## Configurar o pint com pré-commit do captain hook
A principal função do pint é formatar o seu código do jeito mais show de bola o possível.
Você pode manter a configuração padrão ou pode criar o seu próprio pint.json para deixar
o código formatado do jeitinho que você quiser.

Primeiro de tudo, instalaremos o Pint

``` shell
composer require laravel/pint --dev
```

Para rodar o pint, você só precisa dar o comando abaixo que ele já faz toda a mágica 
no seu código 

``` shell 
./vendor/bin/pint
```
Caso você queira ver o que ele alterou, é só rodar o 

``` shell 
./vendor/bin/pint -v
```

E, se você não quer que ele toque no seu código apenas o julgue, é só rodar o comando
abaixo que ele diz tudo de torto que você escreveu 

``` shell 
./vendor/bin/pint --test
```

Com o Pint em mãos, instalaremos agora o Captain Hook. Esse vai ser reponsavel por 
gerenciar os hooks do git, ou seja qualquer ação automática que pode ser realizada antes
ou depois de alguma outra ação no git, como um commit ou push

``` shell 
composer require --dev captainhook/captainhook
```

Após instalar, usamos o próximo comando para configurar o captain hook, após dar enter
o console irá te perguntar o que você quer usar de config, diga sim ou não de acordo
com o que seu coração mandar
``` shell 
vendor/bin/captainhook configure
```
Após responder a úitima pergunta, será criado um arquivo `captainhook.json` na pasta raiz
do seu projeto, esse arquivo terá todas as configurações que você respondeu anteriormente
e algumas a mais para você se divertir.

A única que usaremos nesse caso é a do pré-commit, com isso o arquivo terá apenas
```json
{
    "pre-commit": {
        "enabled": true,
        "actions": [
            {
                "action": "./vendor/bin/pint --test",
                "options": [],
                "conditions": []
            }
        ]
    }
}
```

Nesse caso, usaremos o comando do pint como `--test`, desse modo, o git não permite que
o código seja commitado sem estar formatado da maneira correta, obrigando o desenvolvedor
a rodar o pint na mão para commitar.
