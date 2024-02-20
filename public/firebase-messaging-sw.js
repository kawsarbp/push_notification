importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

firebase.initializeApp({
    apiKey: "AIzaSyBesCUgUcsTanm1_kIuYPKk2VTioCOIewA",
    authDomain: "notification-1325b.firebaseapp.com",
    projectId: "notification-1325b",
    storageBucket: "notification-1325b.appspot.com",
    messagingSenderId: "1003043630825",
    appId: "1:1003043630825:web:7d8ed662046e144c934a78",
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function ({data: {title, body, icon}}) {
    return self.registration.showNotification(title, {body, icon});
});


