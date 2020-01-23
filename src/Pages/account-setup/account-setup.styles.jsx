import styled from "styled-components";
import { CustomButton } from "../../components/custom-button/custom-button.component";

export const AccountSetUpWrapper = styled.div`
  height: 83vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 2rem auto;
  padding: 2rem;
  max-width: 60%;
  background: #ffffff;
  box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.2);
  border-radius: 4px;
  div:first-child {
    text-align: center;
    p {
      margin: 1rem 0;
    }
  }
  .input-container {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: space-between;
    input {
      display: inline-block;
      width: 47%;
      margin: 1.5rem 0;
      outline: none;
      background: #ffffff;
      border: 1px solid rgba(85, 45, 30, 0.4);
      height: 40px;
      box-sizing: border-box;
      border-radius: 5px;
    }
  }
  .terms {
    width: 60%;
    margin: auto;
    input[type="checkbox"] {
      display: block;
      color: #552d1e;
      background: #ffffff;
      border-radius: 4px;
      margin: 1rem 0;
      &:checked {
        background: #552d1e;
        color: #ffffff;
      }
    }
  }
`;

export const AccountSetUpButton = styled(CustomButton)`
  border-radius: 6px;
  margin: 1rem auto;
`;
