# AirCRM

[AirCRM](https://aircrm.io/) - удобная и современная CRM для эффективного управления сделками и задачами малого и среднего бизнеса: статистика сделок, воронка продаж и база клиентов (лидов), конструктор форм для сбора лидов

## Установка

````
$ composer require unetway/aircrm
````

## Использование


````
use Unetway\AirCrm\AirCrm;

$url = '';
$token = '';

$client = new AirCrm($url, $token);

````

**Параметры:**

- url - https://user4.aircrm.io адрес вашей CRM
- token - токен


## Сделки

### Создание сделки

````
$client->deals()->create([
    'name' => 'Новая сделка',
    'stage_id' => 1,
    'amount' => 700,
    'user_id' => 7,
    'status' => 'open',
]);
````

**Параметры:**

- name (REQUIRED, string) название сделки
- stage_id  (REQUIRED, integer) стадия
- amount (OPTIONAL, number) цена
- user_id (OPTIONAL, integer) владелец сделки
- status (OPTIONAL, string) может быть: open, won, lost

### Обновление сделки

````
$client->deals()->update($id, [
    'name' => 'Новая сделка',
    'stage_id' => 1,
    'amount' => 700,
    'user_id' => 7,
    'status' => 'open',
]);
````

**Параметры:**

- id (REQUIRED, integer)
- name (REQUIRED, string) название сделки
- stage_id  (REQUIRED, integer) стадия
- amount (OPTIONAL, number) цена
- user_id (OPTIONAL, integer) владелец сделки
- status (OPTIONAL, string) может быть: open, won, lost


### Воронки сделок

````
$client->pipelines()->get();
````

### Стадии сделок

````
$client->stages()->get();
````

### Поля сделок

````
$client->deals()->fields();
````

## Задачи

### Создание задачи

````
$client->task()->create([
    'title' => 'Новая задача',
    'user_id' => 1,
    'description' => 'Описание этой задачи',
    'note' => 'Заметка этой задачи',
]);
````
**Параметры:**

- title (REQUIRED, string) заголовок
- user_id (REQUIRED, integer) владелец/назначенный
- description (OPTIONAL, string) описание
- note (OPTIONAL, string) заметка


### Обновление задачи

````
$client->task()->update($id, [
    'title' => 'Новая задача',
    'user_id' => 1,
    'description' => 'Описание этой задачи',
    'note' => 'Заметка этой задачи',
]);
````

**Параметры:**

- id (REQUIRED, integer)
- title (REQUIRED, string) заголовок
- user_id (REQUIRED, integer) владелец/назначенный
- description (OPTIONAL, string) описание
- note (OPTIONAL, string) заметка

### Типы задач

````
$client->taskTypes()->get();
````

### Поля задач

````
$client->task()->fields();
````

## Компании

### Создание компании

````
$client->company()->create([
    'name' => $name,
    'email' => $email,
    'domain' => $domain,
    'phones' => $phones,
    'street' => $street,
    'city' => $city,
    'state' => $state,
    'postal_code' => $postal_code,
    'iin' => $iin,
    'kpp' => $kpp,
    'legal_address' => $legal_address,
    'actual_address' => $actual_address,
    'bank' => $bank,
    'account_number' => $account_number,
    'bik' => $bik,
    'corr_check' => $corr_check
]);
````

**Параметры:**

- name (REQUIRED, string) название компании
- email (OPTIONAL, string)
- domain (OPTIONAL, string)
- phones (OPTIONAL, array) 
````
[
    [ "number" => "+365428-854", "type" => "mobile" ],
    [ "number" => "+46178-5444", "type" => "work" ],
    [ "number" => "+955778-136", "type" => "other"'],
]  
````
- street (OPTIONAL, string)
- city (OPTIONAL, string)
- state (OPTIONAL, string)
- postal_code (OPTIONAL, string)
- iin (OPTIONAL, string)
- kpp (OPTIONAL, string)
- legal_address (OPTIONAL, string)
- actual_address (OPTIONAL, string)
- bank (OPTIONAL, string)
- account_number (OPTIONAL, string)
- bik (OPTIONAL, string)
- corr_check (OPTIONAL, string)


### Обновление компании

````
$client->company()->update($id, [
    'name' => $name,
    'email' => $email,
    'domain' => $domain,
    'phones' => $phones,
    'street' => $street,
    'city' => $city,
    'state' => $state,
    'postal_code' => $postal_code,
    'iin' => $iin,
    'kpp' => $kpp,
    'legal_address' => $legal_address,
    'actual_address' => $actual_address,
    'bank' => $bank,
    'account_number' => $account_number,
    'bik' => $bik,
    'corr_check' => $corr_check
]);
````

**Параметры:**

- id (REQUIRED, integer)
- name (REQUIRED, string) название компании
- email (OPTIONAL, string)
- domain (OPTIONAL, string)
- phones (OPTIONAL, array)
````
[
    [ "number" => "+365428-854", "type" => "mobile" ],
    [ "number" => "+46178-5444", "type" => "work" ],
    [ "number" => "+955778-136", "type" => "other"'],
]  
````
- street (OPTIONAL, string)
- city (OPTIONAL, string)
- state (OPTIONAL, string)
- postal_code (OPTIONAL, string)
- iin (OPTIONAL, string)
- kpp (OPTIONAL, string)
- legal_address (OPTIONAL, string)
- actual_address (OPTIONAL, string)
- bank (OPTIONAL, string)
- account_number (OPTIONAL, string)
- bik (OPTIONAL, string)
- corr_check (OPTIONAL, string)

### Поля компаний

````
$client->company()->fields();
````

## Контакты

### Создание контакта

````
$client->contact()->create([
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'phones' => $phones,
    'job_title' => $job_title,
    'street' => $street,
    'city' => $city,
    'state' => $state,
    'postal_code' => $postal_code,
]);
````

**Параметры:**

- first_name (REQUIRED, string)
- last_name (OPTIONAL, string)
- email (OPTIONAL, string)
- phones (OPTIONAL, array)
````
[
    [ "number" => "+365428-854", "type" => "mobile" ],
    [ "number" => "+46178-5444", "type" => "work" ],
    [ "number" => "+955778-136", "type" => "other"'],
]  
````
- job_title (OPTIONAL, string)
- street (OPTIONAL, string)
- city (OPTIONAL, string)
- state (OPTIONAL, string)
- postal_code (OPTIONAL, string)

### Обновление контакта

````
$client->contact()->update($id, [
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'phones' => $phones,
    'job_title' => $job_title,
    'street' => $street,
    'city' => $city,
    'state' => $state,
    'postal_code' => $postal_code,
]);
````

**Параметры:**

- id (REQUIRED, integer)
- first_name (REQUIRED, string)
- last_name (OPTIONAL, string)
- email (OPTIONAL, string)
- phones (OPTIONAL, array)
````
[
    [ "number" => "+365428-854", "type" => "mobile" ],
    [ "number" => "+46178-5444", "type" => "work" ],
    [ "number" => "+955778-136", "type" => "other"'],
]  
````
- job_title (OPTIONAL, string)
- street (OPTIONAL, string)
- city (OPTIONAL, string)
- state (OPTIONAL, string)
- postal_code (OPTIONAL, string)

### Поля контактов

````
$client->contact()->fields();
````

### Поиск контакта

````
$client->contact()->search([
    'q' => '',
    'take' => 1,
    'order' => 'created_at',
    'select' => 'email',
    'search_fields' => 'email:like;phones.number:=',
    'search_match' => 'and'
]);
````
