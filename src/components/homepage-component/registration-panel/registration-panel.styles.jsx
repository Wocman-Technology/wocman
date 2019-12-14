import styled from "styled-components";

import { CustomButton } from "../../custom-button/custom-button.component";

import Customer from "../../../assets/customer.jpg";
import Wocman from "../../../assets/wocman.jpg";

export const RegistrationPanelWrapper = styled.section`
  display: grid;
  grid-template-columns: 1fr 1fr;
  margin: 7rem 0;
  @media (max-width: 768px) {
    grid-template-columns: 1fr;
  }
`;

export const DivWrapper = styled.div`
  background-image: ${props =>
    props.customer ? `url(${Customer})` : `url(${Wocman})`};
  background-position: center center;
  background-repeat: no-repeat;
  object-fit: cover;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 3rem;
  text-align: ${props => (props.customer ? "start" : "end")};
  height: 324px;
  color: ${props => (props.customer ? "#552D1E" : "#FFF5EE")};
  min-width: 100%;
  align-items: center !important;
  justify-content: center !important;
  @media (max-width: 768px) {
    text-align: center;
    height: 100%;
  }

  h3 {
    font-style: normal;
    font-weight: 500;
    font-size: 2.1rem;
    line-height: 180%;
    /* or 43px */
  }

  p {
    font-style: normal;
    font-weight: normal;
    font-size: 1.2rem;
    line-height: 225%;
    /* or 40px */
  }

  div {
    display: grid;
    grid-template-columns: 100%;
    max-width: 100%;
    justify-content: center !important;
    align-items: center !important;
    min-height: ${props => (props.customer ? "65%" : "80%")};
    padding-top: 0 !important;
    margin-top: ${props => (props.customer ? "-1.2rem" : "0")};
  }
`;

export const ButtonWrapper = styled(CustomButton)`
  background-color: unset;
  color: unset;
  border-radius: 2px;
  outline: none !important;
  transition: 0.5s;
  max-width: 165px;
  align-self: flex-end !important;
  margin-left: ${props => (props.regular ? "0" : "60%")};
  margin-top: ${props => (props.regular ? "1rem" : "0")};

  &:hover {
    background-color: unset;
    color: unset;
    opacity: 0.5;
    outline: none;
    z-index: -99;
  }
  @media (max-width: 768px) {
    margin: 0 auto;
  }
`;

//  div {
//     display: grid;
//     grid-template-columns: 1fr;
//     align-self: center;
//     padding: 1rem;
//     width: 80%;
//     c
//     margin: auto;
// }
