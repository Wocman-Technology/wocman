import React from "react";

import { TopRatedJobsWrapper } from "./top-rated-jobs.styles";
import { TopRatedJob } from "../top-rated-job/top-rated-job.component";
import { SectionHeader } from "../../heading-wrapper/heading-wrapper.component";
import { topJobs } from "../../../Pages/HomePage/data";

export const TopRatedJobs = () => (
  <>
    <SectionHeader regular>Top Rated Jobs</SectionHeader>
    <TopRatedJobsWrapper>
      {topJobs.map(topjob => (
        <TopRatedJob key={topjob["id"]} {...topjob} />
      ))}
    </TopRatedJobsWrapper>
  </>
);
