## Real World base Laravel For TiDB and TiDB Cloud

Thanks [alexeymezenin/laravel-realworld-example-app](https://github.com/alexeymezenin/laravel-realworld-example-app) project offer so great example.

This Project is created for Ti-Click project join PingCAP Hackathon 2022.

1. Ready the TiDB Cluster

You can create the TiDB Cluster on [TiDB Cloud](https://tidbcloud.com/) which offer free TiDB Cluster.

2. Access Gitpod
Access [Real World base Level link](https://gitpod.io/#/https://github.com/ti-click/laravel-with-colopl-tidb-driver-realworld-example-app) and open the Gitpod online IDE.

Or you can install [Gitpod Chrome extension](https://chrome.google.com/webstore/detail/gitpod-always-ready-to-co/dodmmooeoklaejobgleioelladacbeki)  in advance, so you can just click the `Gitpod` button on the project's home page.

3. Experience Real World base Laravel For TiDB

* Wait for all tasks to complete automatically.
  * <img width="500" alt="スクリーンショット 2022-10-23 11 59 55" src="https://user-images.githubusercontent.com/689799/197371157-c30c79e0-bd9d-475f-ab97-a922139730e4.png">
  * <img width="500" alt="スクリーンショット 2022-10-23 12 00 18" src="https://user-images.githubusercontent.com/689799/197371170-c68615a3-9943-47b9-b7cb-94f516e82a44.png">
* Click the `frontend` link in the `PORTS` tab
<img width="500" alt="スクリーンショット 2022-10-23 13 36 34" src="https://user-images.githubusercontent.com/689799/197374055-e73261d1-6f21-4d59-9ac4-0ed54194770f.png">

4. Experience Real World base Laravel For TiDB Cloud

* 4.1 edit the file `.env`

```
DB_HOST={TIDBCloud-Host}
DB_PORT=4000
DB_DATABASE=test
DB_USERNAME=root
DB_PASSWORD={TIDBCloud-password}
```

* 4.2 Add Gitpod ip into TiDB Cloud access white list

You can get the ip by the command in a Gitpod terminal below. Please add it into your TiDB Cloud security.

> curl https://ipinfo.io/ip

* 4.3 You can restart the webserver 

  * 4.3.1 Click the `backend: php` terminal and switch to the tab
    * <img width="500" alt="スクリーンショット 2022-10-23 13 47 34" src="https://user-images.githubusercontent.com/689799/197374445-582dc113-895f-4253-b7b0-0cf97f2b0f35.png">
  * 4.3.4 Press ctrl+c to stop the php backend server from running
  * rebuild data and start api server by commands below
  ```
  php artisan migrate
  php artisan db:seed
  php artisan serve --host 0.0.0.0
  ```

* 4.4 Click the `frontend` link in the `PORTS` tab , and experience the realworld site



## [alexeymezenin/laravel-realworld-example-app](https://github.com/alexeymezenin/laravel-realworld-example-app) README.md

### Laravel implementation of RealWorld app

This Laravel app is part of the [RealWorld](https://github.com/gothinkster/realworld) project and implementation of the [Laravel best practices](https://github.com/alexeymezenin/laravel-best-practices).

See how the exact same Medium.com clone (called [Conduit](https://demo.realworld.io)) is built using different [frontends](https://codebase.show/projects/realworld?category=frontend) and [backends](https://codebase.show/projects/realworld?category=backend). Yes, you can mix and match them, because **they all adhere to the same [API spec](https://gothinkster.github.io/realworld/docs/specs/backend-specs/introduction)**

### How to run the API

Make sure you have PHP and Composer installed globally on your computer.

Clone the repo and enter the project folder

```
git clone https://github.com/alexeymezenin/laravel-realworld-example-app.git
cd laravel-realworld-example-app
```

Install the app

```
composer install
cp .env.example .env
```

Run the web server

```
php artisan serve
```

That's it. Now you can use the api, i.e.

```
http://127.0.0.1:8000/api/articles
```
