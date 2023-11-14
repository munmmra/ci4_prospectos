Repositorio para el control de prospectos
===

Base de datos
---

### 1.- Creación de la base de datos

``` sql
CREATE DATABASE IF NOT EXISTS ci4_dependencias CHARACTER SET utf8 COLLATE utf8_general_ci;
```

### 2.- Creación de la tabla dependencia

``` sql
use ci4_dependencias;
CREATE TABLE IF NOT EXISTS dependencia (
    id                 INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre             VARCHAR(200) NOT NULL,
    pagina_web         VARCHAR(200) NULL,
    rubro              VARCHAR(100) NULL,
    contacto_nombre    VARCHAR(200),
    contacto_puesto    VARCHAR(200),
    contacto_telefono  VARCHAR(200),
    contacto_extencion VARCHAR(200),
    contacto_correo    VARCHAR(200),
    estatus            VARCHAR(100),
    obcervaciones      TEXT,
    siglas             VARCHAR(50),
    slug               VARCHAR(200) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE slug (slug)
);
```

### 3 Poblar la tabla dependencias

<details>
  <summary>Click me</summary>
  
  ### datos
``` sql
INSERT INTO dependencia VALUES
(1,'Elvis sighted','elvis-sighted','Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
(2,'Say it isn\'t so!','say-it-isnt-so','Scientists conclude that some programmers have a sense of humor.'),
(3,'Caffeination, Yes!','caffeination-yes','World\'s largest coffee shop open onsite nested coffee shop for staff only.');
```

INSERT IN TO dependencia VALUES 1,`Administración del Patrimonio de la Beneficencia Pública (APBP)`,`https://www.gob.mx/salud/apbp/ `,``.``,``,``,``,``,``,`investigación`,``,`administracion-del-patrimonio-de-la-beneficencia-publica`,`APBP`)
![image](https://github.com/munmmra/ci4_prospectos/assets/8868603/0b7d7fcf-b173-40a9-9857-c0d8df3bccc9)

</details>

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> **Warning**
> The end of life date for PHP 7.4 was November 28, 2022. If you are
> still using PHP 7.4, you should upgrade immediately. The end of life date
> for PHP 8.0 will be November 26, 2023.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
