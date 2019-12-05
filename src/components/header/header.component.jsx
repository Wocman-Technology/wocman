import React from 'react';
import {HeaderWrapper} from './header.styles'
import {NavBar} from '../navbar/navbar.component'
import {HeaderForm} from '../../components/homepage-component/header-form/header-form.component';
import {CustomButton} from '../custom-button/custom-button.component';





export const Header = () => (

    <>
    <HeaderWrapper>
        <NavBar/>
        <div className="landingwords">
        <h2>Get trusted skilled men and professionals from wocman</h2>
        <p>With just a tap on your phone get your repairs, and domestic work done with zero hassle.</p>
        </div>
        <div class="header-button">
    <CustomButton inverted>customer</CustomButton>
    <CustomButton>wocman</CustomButton>
        </div>    
    </HeaderWrapper>
     <HeaderForm/>
     </>


)