import React from "react";

import { PopularCaregoriesWrapper} from "./popular-categories.styles";

import { PopularCategory } from "../popular-category/popular-category.component";
import {SectionHeader} from '../heading-wrapper/heading-wrapper.component'
import {categories} from '../../Pages/HomePage/data'

export const PopularCategories = () => (
    <>
    <SectionHeader>Popular Job Categories</SectionHeader>
  <PopularCaregoriesWrapper>
    {categories.map(category => <PopularCategory key={category['id']}{...category}/>)}
  </PopularCaregoriesWrapper>
  </>
);
