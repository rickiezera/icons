# Icons

Pacote de icones SVG para Laravel usando [Blade Icons](https://github.com/blade-ui-kit/blade-icons).

O pacote registra os SVGs de `resources/svg` como componentes Blade com o prefixo `icon`. Atualmente o repositório inclui mais de 5.000 icones.

## Requisitos

- PHP 8.0 ou superior
- `blade-ui-kit/blade-icons` 1.8 ou superior
- Laravel com package discovery habilitado

## Instalacao

```bash
composer require rickiezera/icons
```

O service provider `RickieZera\Icons\IconsServiceProvider` e registrado automaticamente pelo Laravel via Composer.

## Uso

Use o nome do arquivo SVG sem a extensao, precedido por `x-icon-`.

```blade
<x-icon-user />
<x-icon-horse />
<x-icon-album class="w-6 h-6 text-gray-500" />
<x-icon-anchor style="color: #555" />
```

Por exemplo, o arquivo `resources/svg/horse.svg` fica disponivel como:

```blade
<x-icon-horse />
```

## Publicando os SVGs

Se quiser copiar os SVGs para o projeto consumidor para consulta ou customizacao:

```bash
php artisan vendor:publish --tag=icons
```

Os arquivos serao publicados em:

```text
resources/vendor/icons/svg
```

## Blade Icons

Este pacote usa Blade Icons por baixo. Recursos como atributos, classes, diretivas e cache seguem o comportamento da biblioteca base.

Para mais detalhes, consulte a documentacao do Blade Icons:

https://github.com/blade-ui-kit/blade-icons

## Licenca

MIT
