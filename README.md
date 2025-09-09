# PHPExcel

Biblioteca PHP para criar e manipular arquivos Excel (XLSX) de forma simples e prática.

## Instalação

Recomenda-se instalar via Composer:

```bash
composer install
```

## Uso Básico

### Criar uma planilha

```php
<?php
require 'vendor/autoload.php';

use GustavoAlvesDev\PHPExcel\Spreadsheet;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Olá Mundo!');

$spreadsheet->save('exemplo.xlsx');
```

### Ler uma planilha

```php
<?php
require 'vendor/autoload.php';

use GustavoAlvesDev\PHPExcel\Reader\Xlsx;

$reader = new Xlsx();
$spreadsheet = $reader->load('exemplo.xlsx');
$sheet = $spreadsheet->getActiveSheet();

echo $sheet->getCell('A1')->getValue();
```

## Funcionalidades

- Criar arquivos Excel (XLSX)  
- Ler arquivos Excel (XLSX)  
- Manipular células e planilhas  
- Suporte a múltiplas planilhas  

## Contribuição

Contribuições são bem-vindas! Abra issues ou pull requests para melhorias e correções.

## Licença

Este projeto está sob a licença MIT.
