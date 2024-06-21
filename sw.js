self.addEventListener("push", (event) => {
    const notification = event.data.json();
// {"title":"Hola" , "body":"siempre increible!" , "url":"./?message=123"}
    event.waitUntil(self.registration.showNotification(notification.title , {
        body:notification.body, 
        icon: "kirby.png",
        data: {
            notifURL: notification.url
        }
    }));
});

self.addEventListener("notificationclick", (event) => {
    event.waitUntil(clients.openwindow(event.notification.data.notifURL));
});