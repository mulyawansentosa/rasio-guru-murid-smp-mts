# Personal Repository [Mulyawan Sentosa]
# rasio-guru-murid-smp-mts

[![Join the chat at https://gitter.im/rasio-guru-murid-smp-mts/Lobby](https://badges.gitter.im/rasio-guru-murid-smp-mts/Lobby.svg)](https://gitter.im/rasio-guru-murid-smp-mts/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-smp-mts/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-smp-mts/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-smp-mts/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-smp-mts/build-status/master)

Rasio Guru-Murid (RGM) SD/MI

## install via composer

- Development snapshot
```bash
$ composer require bantenprov/rasio-guru-murid-smp-mts:dev-master
```
- Latest release:

```bash
$ composer require bantenprov/rasio-guru-murid-smp-mts:v0.1.0
```

## download via github
~~~
bash
$ git clone https://github.com/bantenprov/rasio-guru-murid-smp-mts.git
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
    Bantenprov\RasioGMSmpMts\RasioGMSmpMtsServiceProvider::class,

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=rasio-guru-murid-smp-mts-assets
$ php artisan vendor:publish --tag=rasio-guru-murid-smp-mts-public
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
    path: '/dashboard/rasio-guru-murid-smp-mts',
    components: {
      main: resolve => require(['./components/views/bantenprov/rasio-guru-murid-smp-mts/DashboardRasioGMSmpMts.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Rasio Guru-Murid (RGM) SD/MI"
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
      path: '/admin/dashboard/rasio-guru-murid-smp-mts',
      components: {
        main: resolve => require(['./components/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMtsAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "Rasio Guru-Murid (RGM) SD/MI"
      }
    }
 //== ...   
  ]
},

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
          name: 'Rasio Guru-Murid (RGM) SD/MI',
          link: '/dashboard/rasio-guru-murid-smp-mts',
          icon: 'fa fa-angle-double-right'
        }
  ]
},

```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import RasioGMSmpMts from './components/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMts.chart.vue';
Vue.component('echarts-rasio-guru-murid-smp-mts', RasioGMSmpMts);

import RasioGMSmpMtsKota from './components/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMtsKota.chart.vue';
Vue.component('echarts-rasio-guru-murid-smp-mts-kota', RasioGMSmpMtsKota);

import RasioGMSmpMtsTahun from './components/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMtsTahun.chart.vue';
Vue.component('echarts-rasio-guru-murid-smp-mts-tahun', RasioGMSmpMtsTahun);

import RasioGMSmpMtsAdminShow from './components/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMtsAdmin.show.vue';
Vue.component('admin-view-rasio-guru-murid-smp-mts-tahun', RasioGMSmpMtsAdminShow);

//== Echarts Angka Partisipasi Kasar

import RasioGMSmpMtsBar01 from './components/views/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMtsBar01.vue';
Vue.component('rasio-guru-murid-smp-mts-bar-01', RasioGMSmpMtsBar01);

import RasioGMSmpMtsBar02 from './components/views/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMtsBar02.vue';
Vue.component('rasio-guru-murid-smp-mts-bar-02', RasioGMSmpMtsBar02);

//== mini bar charts
import RasioGMSmpMtsBar03 from './components/views/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMtsBar03.vue';
Vue.component('rasio-guru-murid-smp-mts-bar-03', RasioGMSmpMtsBar03);

import RasioGMSmpMtsPie01 from './components/views/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMtsPie01.vue';
Vue.component('rasio-guru-murid-smp-mts-pie-01', RasioGMSmpMtsPie01);

import RasioGMSmpMtsPie02 from './components/views/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMtsPie02.vue';
Vue.component('rasio-guru-murid-smp-mts-pie-02', RasioGMSmpMtsPie02);

//== mini pie charts
import RasioGMSmpMtsPie03 from './components/views/bantenprov/rasio-guru-murid-smp-mts/RasioGMSmpMtsPie03.vue';
Vue.component('rasio-guru-murid-smp-mts-pie-03', RasioGMSmpMtsPie03);
```
