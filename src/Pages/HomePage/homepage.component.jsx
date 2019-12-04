import React from 'react';

import {Header} from '../../components/header/header.component';
import {PopularCategories} from '../../components/popular-categories/popular-categories.component'
import {TopRatedJobs} from '../../components/top-rated-jobs/top-rated-jobs.component'

export const HomePage = () => (
    <>
    <Header/>
    <PopularCategories/>
    <TopRatedJobs/>
    </>
)