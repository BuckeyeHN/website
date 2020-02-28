# Website Basics
This is a repository for website related work.

## Overview
This class will help you:
* Install and become familiar with IIS
* Configure Git for easy saving of your website
* Create websites with specific characteristics

## Sites
* [Pies](https://buckeyehn.github.io/website/pie/)
* [Jricardo](https://buckeyehn.github.io/website/ricardo/)
* [Why have cats?](https://buckeyehn.github.io/website/cookie/)
* [Bread Crunch](https://buckeyehn.github.io/website/breadcrunch/)
## Powershell Setup
# LOCAL
$username='username'
$path='C:\src\test'
git config --global user.name "$username"
git config --global user.email "$username@users.noreply.github.com"
$dir="$path"
$website="$dir\website"
Clear-Host
git config --global user.name
git config --global user.email
Write-Host 'Use $website for C:\src\jerice\website'
Set-Location $dir
