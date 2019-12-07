import React from 'react';

import {Header} from '../../components/header/header.component';
import  HeaderImage from '../../assets/header.svg'
import {HeaderForm} from '../../components/homepage-component/header-form/header-form.component'
import {NavBar} from '../../components/navbar/navbar.component'
import {PopularCategories} from '../../components/homepage-component/popular-categories/popular-categories.component'
import {TopRatedJobs} from '../../components/homepage-component/top-rated-jobs/top-rated-jobs.component';
import {RegistrationPanel} from '../../components/homepage-component/registration-panel/registration-panel.component';
import {WorksOnDemand} from '../../components/homepage-component/works-on-demand/works-on-demand.component';
import {Faq} from '../../components/homepage-component/faq/faq.component'
import {NewsLetter} from "../../components/newsletter/newsletter.component"

export const HomePage = () => (
    <>
    <Header image={HeaderImage}>
        <NavBar/>
        <div className="landingwords">
        <h2>Get trusted skilled men and professionals from wocman</h2>
        <p>With just a tap on your phone get your repairs, and domestic work done with zero hassle.</p>
        </div>
        <HeaderForm/>
    </Header>
    <PopularCategories/>
    <TopRatedJobs/>
    <RegistrationPanel/>
    <WorksOnDemand/>
    <Faq/>
    <NewsLetter/>
    </>
)