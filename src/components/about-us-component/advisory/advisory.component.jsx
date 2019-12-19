import React from "react";
import { SectionHeader } from "../../heading-wrapper/heading-wrapper.component";

import { AdvisoryWrapper, DivWrapper } from "./advisory.styles";

export const Advisory = () => (
  <>
    <SectionHeader regular>Advisory</SectionHeader>
    <AdvisoryWrapper>
      <DivWrapper></DivWrapper>
      <div>
        <p>
          Karen Jensen is an American entrepreneur, dedicated mentor, blogger,
          technology consultant, an expert in smartER cities and cybersecurity,
          currently, she is the president of Saaby Consulting Company. One of
          her primary lifetime goals is to swim in as many bodies of water on
          Earth as she can to leverage on technology to help solve real-life
          problems. Would love to hear from you!
        </p>
      </div>
    </AdvisoryWrapper>
  </>
);
