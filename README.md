#Form

Установка
------------
Клонируйте репозиторий

```
git clone https://github.com/Andreyop/form.git
```
Перейдите в корневую папку проекта

Выполните команду

```
composer install
```



В "common/config/main-local"

> Настроите подключение к БД
> 
>
> ```
>    'db' => [
>            'class' => 'yii\db\Connection',
>            'dsn' => 'mysql:host=localhost;dbname=test',
>            'username' => 'root',
>            'password' => '',
>            'charset' => 'utf8',
> ```

Выполните команду

```
php yii migrate
```
затем

```
php yii queue/listen
```
----------------
Нужно зарегистрироваться нажав Signup на главной странице или по ссылке http://form/site/signup
и подтвердить свой e-mail (перейти по ссылке на почте).

Приложение доступно по ссылке "form/admin"...