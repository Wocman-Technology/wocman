import styled from "styled-components";
import { MDBCard, MDBCardImage } from "mdbreact";
import { CustomButton } from "../../custom-button/custom-button.component";

export const TopRatedJobWrapper = styled.article`
  div.col {
    margin: 0 auto !important;
    justify-content: center;
  }

  @media (max-width: 768px) {
    margin: 4rem 0 !important;
  }

  @media (min-width: 768px) and (max-width: 1100px) {
    margin: 4rem 0 !important;
  }
`;

export const CardWrapper = styled(MDBCard)`
  padding: 0 !important;
  margin: 0 auto;
  box-shadow: 0px 15px 75px rgba(0, 0, 0, 0.22) !important;
  min-height: 80% !important;

  h6 {
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 138.6%;
    /* or 25px */

    display: flex;
    align-items: center;

    color: #363636;
  }
`;

export const ImageWrapper = styled(MDBCardImage)`
  box-shadow: 0px 15px 75px rgba(0, 0, 0, 0.22);
  border-radius: 13.5px;
`;

export const ButtonWrapper = styled(CustomButton)`
  text-transform: unset;
  position: absolute;
  bottom: -2rem;
  left: 0;
  width: 200px;
`;

export const ListWrapper = styled.div`
  margin: 1.5rem 0 !important;
  font-size: 0.9rem;
  font-weight: 400;
  color: #747373;
`;
