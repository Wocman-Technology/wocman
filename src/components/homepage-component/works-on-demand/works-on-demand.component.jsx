import React from "react";

import { WorksOnDemandWrapper } from "./works-on-demand.styles";
import { WorkOnDemand } from "../work-on-demand/work-on-demand.component";
import { onDemandJobs } from "../../../Pages/HomePage/data";
import { SectionHeader } from "../../heading-wrapper/heading-wrapper.component";

export const WorksOnDemand = () => (
  <>
    <SectionHeader regular>Works on Demand</SectionHeader>
    <WorksOnDemandWrapper>
      {onDemandJobs.map(onDemandJob => (
        <WorkOnDemand key={onDemandJob["id"]} {...onDemandJob} />
      ))}
    </WorksOnDemandWrapper>
  </>
);
