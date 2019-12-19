import styled from "styled-components";
import { CustomButton } from "../../custom-button/custom-button.component";

export const FormWrapper = styled.div`
  display: flex;
  flex-direction: column;
  margin: 5rem auto;
  justify-content: center;
  align-items: center;
  padding: 2rem 4rem;
  border-radius: 10px;
  background: #FFFFFF;
  box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.1);
  width: 80%;
  @media (max-width: 768px) {
          width: 90%;
          padding: 2rem;
      }

  div {
      width: 60%;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      align-self: center;
      justify-self: center;

      @media (max-width: 768px) {
          width: 100%;
      }

      input, textarea {
          width: 100%;
          border: 1px solid #552D1E;
          display: inline-block;
          margin: 0.5rem 0;
          box-sizing: border-box;
          border-radius: 5px;
          background: inherit;
          padding: 1rem;
          outline: none;
      }

      input {
          height: 45px;
      }

      *::placeholder {
          font-size: 12px;
          color: rgba(0, 0, 0, 0.5);
          line-height: 23px;
          font-weight: normal;
      }
  }
  div:nth-child(1) {
     justify-content: flex-start;
     align-items: flex-start;
     padding: 1rem 0;
     margin-top: 1.5rem;

     h1 {
         margin-bottom: 1.5rem;
         color: #552D1E;
         line-height: 40px;
         display: block;
         width: 100%;
     }
     small {
         color: rgba(0, 0, 0, 0.5);
         font-weight: bold;
         line-height: 25px;
         display: block;
     }
  }

  div:nth-child(3) {
     justify-content: space-between;
    input {
       width: 48%; 
    }
  }
`;

export const ButtonWrapper = styled(CustomButton)`
    width: 60%;
    border-radius: 5px;
    font-size: 12px;
    line-height: 20px;
    margin: 0.5rem 0 2.5rem;
     @media (max-width: 768px) {
          width: 100%;
      }
`