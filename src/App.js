import React from 'react';
import {HomePage} from './Pages/HomePage/homepage.component'
import {AboutUs} from './Pages/about-us/about-us.component'
import {Services} from './Pages/services/services.component'
import {Switch, Route} from 'react-router-dom';
import {Footer} from './components/footer/footer.component'
import './App.css';

const App = ()  => {
  
  return (
    <>
    
    <Switch>
    <Route exact path="/" component={HomePage}/>
    <Route path="/about" component={AboutUs}/>
    <Route path="/services" component={Services}/>
    </Switch>
    <Footer/>
    </>
  );
}

export default App;
