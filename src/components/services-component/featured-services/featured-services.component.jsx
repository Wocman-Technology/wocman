import React from "react";

import { SectionHeader } from "../../heading-wrapper/heading-wrapper.component";
import { FeaturedService } from "../featured-service/featured-service.component";
import { FeaturedServicesWrapper } from "./featured-services.styles";
import { ourFeaturedServices } from "../../../Pages/HomePage/data";

export const FeaturedServices = () => (
  <>
    <SectionHeader regular>Our Featured Services</SectionHeader>
    <FeaturedServicesWrapper>
      {ourFeaturedServices.map(service => (
        <FeaturedService key={service.id} {...service} />
      ))}
    </FeaturedServicesWrapper>
    <h2 className="featured">See More</h2>
  </>
);
