var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  '/career-ch/',
  '/career-ch/public/css/style.css',
  '/career-ch/public/service-worker.js'

];


self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open(CACHE_NAME)
    .then(function(cache){
       console.log('ServiceWorker install');
       return cache.addAll(urlsToCache);
    })
  );
 
});

self.addEventListener('activate', function (event) {
  var cacheWhitelist = ['pages-cache-v1','blog-posts-cache-v1'];
  event.waitUntil(
    caches.keys().then(function (cacheNames) {
      return Promise.all(
        cacheNames.map(function (cacheName) {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
            
          }
          
        })
      );
      
    })
  )
});
// ここがないとイベント追加が動かないかも
self.addEventListener('fetch', function (event) {
  event.respondwith(
    caches.match(event.request)
      .then(function (response) {
        if (response) {
          return response
        }
        return fetch(event.request);
      })
  );

});