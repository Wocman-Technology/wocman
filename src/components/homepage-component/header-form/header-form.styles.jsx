import styled from "styled-components";
import { CustomButton } from "../../custom-button/custom-button.component";

export const FormOuterWrapper = styled.div`
  z-index: 3;
  margin-top: 70px;

  .header-button {
    display: flex;
    width: 80%;
    position: relative;
    margin: 0 auto;
    padding: 0;
    @media (width: 1024px) {
      margin: 0 auto;
    }
    @media (max-width: 900px) {
    width: 90%;
  }

    button {
      font-size: 0.7rem;
      border: none !important;
    }
  }

  @media (max-width: 900px) {
    width: 90%;
    padding: 0;
    margin: 0 auto;
    margin-bottom: 4rem !important;
  }

  @media (width: 1024px) {
    display: flex;
    position: static;
    align-items: center;
    flex-direction: column;
    margin-top: 80vh;
    justify-content: center;
    height: 150px;
  }

  @media (min-width: 1200px) {
    margin-top: 110px;
  }

  @media (min-height: 969px) and (max-height: 1365px) {
    margin-top: 30vh;
    margin-bottom: 4rem;
  }

  @media (height: 1366px) {
    margin-top: 57vh;
  }

  
  @media (max-width: 767px) {
  display: none;
  }
`;

export const FormWrapper = styled.div`
  width: 80%;
  z-index: 3;
  display: grid;
  grid-template-columns: repeat(3, 32%);
  justify-content: space-evenly;
  background: ${props =>
    props.customer ? "#552D1E !important" : "#FFFFFF !important"};
  align-content: center;
  padding: 30px 0 0 10px;
  margin: 0 auto;
  color: ${props =>
    props.customer ? "#FFFFFF !important" : "#552D1E !important"};
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 0px 10px 10px 10px;

  @media (width: 1024px) {
    margin: 0 auto;
    width: 80%;
  }

  @media (max-width: 900px) {
    margin: 0 auto;
    width: 90%;
  }
  @media (max-width: 767px) {
  display: none;
  }
`;

export const JoinButton = styled(CustomButton)`
  width: 50%;
  margin: ${props => (props.inverted ? "0 auto 2rem 120%" : "0 auto 2rem;")};
  font-size: 0.9rem;
`;
