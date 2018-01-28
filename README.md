# Laju inflasi menurut kelompok pengeluaran

## Laju Inflasi Menurut Kelompok Pengeluaran di Provinsi Banten

[![Join the chat at https://gitter.im/li-pengeluaran/Lobby](https://badges.gitter.im/li-pengeluaran/Lobby.svg)](https://gitter.im/li-pengeluaran/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/li-pengeluaran/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/li-pengeluaran/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/li-pengeluaran/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/li-pengeluaran/build-status/master)

### install via composer

- Development snapshot
```bash
$ composer require bantenprov/laju-inflasi-menurut-kelompok-pengeluaran:dev:master
```
- Latest release:

### download via github

~~~bash
$ git clone https://github.com/bantenprov/laju-inflasi-menurut-kelompok-pengeluaran.git
~~~

#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\LIPengeluaran\LIPengeluaranServiceProvider::class,

```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/li-pengeluaran',
    components: {
      main: resolve => require(['./components/views/bantenprov/li-pengeluaran/DashboardLIPengeluaran.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Laju Inflasi Pengeluaran"
    }
  }
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
      path: '/admin/dashboard/li-pengeluaran',
      components: {
        main: resolve => require(['./components/bantenprov/li-pengeluaran/LIPengeluaranAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "Laju Inflasi Pengeluaran"
      }
    }

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Laju Inflasi Pengeluaran',
          link: '/dashboard/li-pengeluaran',
          icon: 'fa fa-angle-double-right'
        }
  ]
},
```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import LIPengeluaran from './components/bantenprov/li-pengeluaran/LIPengeluaran.chart.vue';
Vue.component('echarts-li-pengeluaran', LIPengeluaran);

import LIPengeluaranKota from './components/bantenprov/li-pengeluaran/LIPengeluaranKota.chart.vue';
Vue.component('echarts-li-pengeluaran-kota', LIPengeluaranKota);

import LIPengeluaranTahun from './components/bantenprov/li-pengeluaran/LIPengeluaranTahun.chart.vue';
Vue.component('echarts-li-pengeluaran-tahun', LIPengeluaranTahun);

import LIPengeluaranAdminShow from './components/bantenprov/li-pengeluaran/LIPengeluaranAdmin.show.vue';
Vue.component('admin-view-li-pengeluaran-tahun', LIPengeluaranAdminShow);

//== Echarts Angka Partisipasi Kasar

import LIPengeluaranBar01 from './components/views/bantenprov/li-pengeluaran/LIPengeluaranBar01.vue';
Vue.component('li-pengeluaran-bar-01', LIPengeluaranBar01);

import LIPengeluaranBar02 from './components/views/bantenprov/li-pengeluaran/LIPengeluaranBar02.vue';
Vue.component('li-pengeluaran-bar-02', LIPengeluaranBar02);

//== mini bar charts
import LIPengeluaranBar03 from './components/views/bantenprov/li-pengeluaran/LIPengeluaranBar03.vue';
Vue.component('li-pengeluaran-bar-03', LIPengeluaranBar03);

import LIPengeluaranPie01 from './components/views/bantenprov/li-pengeluaran/LIPengeluaranPie01.vue';
Vue.component('li-pengeluaran-pie-01', LIPengeluaranPie01);

import LIPengeluaranPie02 from './components/views/bantenprov/li-pengeluaran/LIPengeluaranPie02.vue';
Vue.component('li-pengeluaran-pie-02', LIPengeluaranPie02);

//== mini pie charts
import LIPengeluaranPie03 from './components/views/bantenprov/li-pengeluaran/LIPengeluaranPie03.vue';
Vue.component('li-pengeluaran-pie-03', LIPengeluaranPie03);
```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=li-pengeluaran-assets
$ php artisan vendor:publish --tag=li-pengeluaran-public
```
