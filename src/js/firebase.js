// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDvYtCrqScLstXtTcaEDcfyfaWti5668KU",
  authDomain: "my-wordpress-42109.firebaseapp.com",
  projectId: "my-wordpress-42109",
  storageBucket: "my-wordpress-42109.appspot.com",
  messagingSenderId: "801924458373",
  appId: "1:801924458373:web:9dc587233f4679c49f46ec",
  measurementId: "G-NM2DM9Y7B6",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
