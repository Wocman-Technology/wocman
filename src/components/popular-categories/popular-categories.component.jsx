import React from "react";

import { PopularCaregoriesWrapper, HeadingWrapper } from "./popular-categories.styles";

import { PopularCategory } from "../popular-category/popular-category.component";
import {categories} from './data'

export const PopularCategories = () => (
    <>
    <HeadingWrapper>Popular Job Categories</HeadingWrapper>
  <PopularCaregoriesWrapper>
    {categories.map(category => <PopularCategory key={category['id']}{...category}/>)}
  </PopularCaregoriesWrapper>
  </>
);
