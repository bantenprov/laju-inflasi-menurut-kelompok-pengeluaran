# Laju inflasi menurut kelompok pengeluaran

## Laju Inflasi Menurut Kelompok Pengeluaran di Provinsi Banten

[![Join the chat at https://gitter.im/laju-inflasi-pengeluaran/Lobby](https://badges.gitter.im/laju-inflasi-pengeluaran/Lobby.svg)](https://gitter.im/laju-inflasi-pengeluaran/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/laju-inflasi-pengeluaran/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/laju-inflasi-pengeluaran/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/laju-inflasi-pengeluaran/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/laju-inflasi-pengeluaran/build-status/master)

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
    Bantenprov\LajuInflasiPengeluaran\LajuInflasiPengeluaranServiceProvider::class,

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
    path: '/dashboard/laju-inflasi-pengeluaran',
    components: {
      main: resolve => require(['./components/views/bantenprov/laju-inflasi-pengeluaran/DashboardLajuInflasiPengeluaran.vue'], resolve),
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
      path: '/admin/dashboard/laju-inflasi-pengeluaran',
      components: {
        main: resolve => require(['./components/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaranAdmin.show.vue'], resolve),
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
          link: '/dashboard/laju-inflasi-pengeluaran',
          icon: 'fa fa-angle-double-right'
        }
  ]
},
```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import LajuInflasiPengeluaran from './components/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaran.chart.vue';
Vue.component('echarts-laju-inflasi-pengeluaran', LajuInflasiPengeluaran);

import LajuInflasiPengeluaranKota from './components/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaranKota.chart.vue';
Vue.component('echarts-laju-inflasi-pengeluaran-kota', LajuInflasiPengeluaranKota);

import LajuInflasiPengeluaranTahun from './components/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaranTahun.chart.vue';
Vue.component('echarts-laju-inflasi-pengeluaran-tahun', LajuInflasiPengeluaranTahun);

import LajuInflasiPengeluaranAdminShow from './components/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaranAdmin.show.vue';
Vue.component('admin-view-laju-inflasi-pengeluaran-tahun', LajuInflasiPengeluaranAdminShow);

//== Echarts Angka Partisipasi Kasar

import LajuInflasiPengeluaranBar01 from './components/views/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaranBar01.vue';
Vue.component('laju-inflasi-pengeluaran-bar-01', LajuInflasiPengeluaranBar01);

import LajuInflasiPengeluaranBar02 from './components/views/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaranBar02.vue';
Vue.component('laju-inflasi-pengeluaran-bar-02', LajuInflasiPengeluaranBar02);

//== mini bar charts
import LajuInflasiPengeluaranBar03 from './components/views/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaranBar03.vue';
Vue.component('laju-inflasi-pengeluaran-bar-03', LajuInflasiPengeluaranBar03);

import LajuInflasiPengeluaranPie01 from './components/views/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaranPie01.vue';
Vue.component('laju-inflasi-pengeluaran-pie-01', LajuInflasiPengeluaranPie01);

import LajuInflasiPengeluaranPie02 from './components/views/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaranPie02.vue';
Vue.component('laju-inflasi-pengeluaran-pie-02', LajuInflasiPengeluaranPie02);

//== mini pie charts
import LajuInflasiPengeluaranPie03 from './components/views/bantenprov/laju-inflasi-pengeluaran/LajuInflasiPengeluaranPie03.vue';
Vue.component('laju-inflasi-pengeluaran-pie-03', LajuInflasiPengeluaranPie03);
```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=laju-inflasi-pengeluaran-assets
$ php artisan vendor:publish --tag=laju-inflasi-pengeluaran-public
```
