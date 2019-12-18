import styled from "styled-components";
import { CustomButton } from "../../custom-button/custom-button.component";

export const FormOuterWrapper = styled.div`
  z-index: 3;
  margin-top: 23vh;

  .header-button {
    display: flex;
    width: 80%;
    position: relative;
    margin: 0 auto;
    margin-bottom: -5rem;
    margin-left: -0.1%;
    padding: 0;

    button {
      font-size: 0.7rem;
      border: none !important;
    }
  }

  @media (max-width: 900px) {
    display: none;
  }

  @media (width: 1024px) {
    display: none;
  }
`;

export const FormWrapper = styled.div`
  width: 80%;
  position: relative;
  z-index: 3;
  display: grid;
  grid-template-columns: repeat(3, 32%);
  justify-content: space-evenly;
  background: ${props =>
    props.customer ? "#552D1E !important" : "#FFFFFF !important"};
  align-content: center;
  padding: 30px 0 0 10px;
  left: calc(100% - 88vw);
  top: calc(100% - 10vh);
  margin: 0 0 5rem 0;
  color: ${props =>
    props.customer ? "#FFFFFF !important" : "#552D1E !important"};
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 0px 10px 10px 10px;

  @media (width: 1024px) {
    left: calc(100% - 88vw);
    top: 45.6rem;
  }

  @media (max-width: 900px) {
    display: none;
  }

  @media (width: 1024px) {
    display: none;
  }
`;

export const JoinButton = styled(CustomButton)`
  width: 50%;
  margin: ${props => (props.inverted ? "0 auto 2rem 120%" : "0 auto 2rem;")};
  font-size: 0.9rem;
`;
