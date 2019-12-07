import React from 'react';

import {NewsLetter} from '../../components/newsletter/newsletter.component';
import {NavBar} from '../../components/navbar/navbar.component'
import {AboutUsHeaderWrapper} from './about-us.styles'
import HeaderImage from '../../assets/about-us.svg'


export const AboutUs = () => (
    <>
    <AboutUsHeaderWrapper image={HeaderImage}>
    <NavBar/>
        <div className="landingwords">
        <h2>About Us</h2>
        <p>There is something particularly fascinating about us.</p>
        </div>
    </AboutUsHeaderWrapper>
    <NewsLetter/>
    </>
)