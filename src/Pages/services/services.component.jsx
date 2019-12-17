import React from 'react';
import HeaderImage from '../../assets/about-us.jpg';
import {NavBar} from '../../components/navbar/navbar.component'
import {NewsLetter} from '../../components/newsletter/newsletter.component';
import {FeaturedServices} from '../../components/services-component/featured-services/featured-services.component';
import {Gardener} from '../../components/gardener-component/gardener.component';
import {ServiceSection} from '../../components/at-your-service/at-your-service-section/service-section.component'
import {ServicesHeaderWrapper} from './services.styles';
import {WhyChooseUs} from '../../components/services-component/why-choose-us/why-choose-us.component' 


export const Services = () => (
    <>
    <ServicesHeaderWrapper image={HeaderImage}>
    <NavBar/>
        <div className="landingwords">
        <h2>Services</h2>
        <p>We execute your construction, repairs and domestic works the right way.</p>
        </div>
    </ServicesHeaderWrapper>
    <WhyChooseUs/>
    <FeaturedServices/>
    <Gardener/>
    <ServiceSection/>
    <NewsLetter/>
    </>

)