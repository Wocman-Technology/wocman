import React from 'react';

import {Header} from '../../components/header/header.component';
import {PopularCategories} from '../../components/homepage-component/popular-categories/popular-categories.component'
import {TopRatedJobs} from '../../components/homepage-component/top-rated-jobs/top-rated-jobs.component';
import {RegistrationPanel} from '../../components/homepage-component/registration-panel/registration-panel.component';
import {WorksOnDemand} from '../../components/homepage-component/works-on-demand/works-on-demand.component';
import {Faq} from '../../components/homepage-component/faq/faq.component'

export const HomePage = () => (
    <>
    <Header/>
    <PopularCategories/>
    <TopRatedJobs/>
    <RegistrationPanel/>
    <WorksOnDemand/>
    <Faq/>
    </>
)