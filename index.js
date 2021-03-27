
var firebaseConfig = {
    apiKey: "AIzaSyBP_9IJ7-2khU2u-IgBZIxh3EtvULuNJ5A",
    authDomain: "auth-304311.firebaseapp.com",
    projectId: "auth-304311",
    storageBucket: "auth-304311.appspot.com",
    messagingSenderId: "364013436900",
    appId: "1:364013436900:web:ccdcd415b57ce013d3d1f1"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);


/************** Google Authentication****************/


$('#googleSignIn').click(function () {
    var provider = new firebase.auth.GoogleAuthProvider();

    firebase.auth()

        .signInWithPopup(provider).then(function (result) {
            var token = result.credential.accessToken;
            var user = result.user;

            console.log(token)
            console.log(user)
            location.replace('./getStarted.php');
        }).catch(function (error) {
            var errorCode = error.code;
            var errorMessage = error.message;

            console.log(error.code)
            console.log(error.message)
        });


});


/************** Facebook Authentication****************/


$('#facebookSignIn').click(function () {
    var provider = new firebase.auth.FacebookAuthProvider();
    location.replace('./getStarted.php');


    firebase
        .auth()
        .signInWithPopup(provider)
        .then((result) => {
            var credential = result.credential;
            var user = result.user;
            var accessToken = credential.accessToken;

        })
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            var email = error.email;
            var credential = error.credential;

            // ...
        });
});