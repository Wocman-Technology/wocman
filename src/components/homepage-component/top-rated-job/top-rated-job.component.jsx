import React from "react";
import { MDBCardBody, MDBCol } from "mdbreact";

import {
  TopRatedJobWrapper,
  ImageWrapper,
  CardWrapper,
  ButtonWrapper,
  ListWrapper
} from "./top-rated-job.styles";

export const TopRatedJob = ({ img, title, bullets }) => (
  <TopRatedJobWrapper>
    <MDBCol>
      <CardWrapper style={{ width: "18rem" }}>
        <ImageWrapper
          className="img-fluid"
          src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
          waves
        />
        <MDBCardBody>
          <h6>{title}</h6>
          <ListWrapper>
            <ul>
              {bullets.map(bullet => (
                <li key={bullet}>{bullet}</li>
              ))}
            </ul>
          </ListWrapper>
          <ButtonWrapper href="#">View More</ButtonWrapper>
        </MDBCardBody>
      </CardWrapper>
    </MDBCol>
  </TopRatedJobWrapper>
);
