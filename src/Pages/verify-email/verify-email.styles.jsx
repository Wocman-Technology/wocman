import styled from "styled-components";
import { CustomButton } from "../../components/custom-button/custom-button.component";

export const VerifyEmailWrapper = styled.div`
    width: 100%;
    margin: 5rem auto;

    div {
        width: 100%;
        text-align: center;
        img {
            display: block;
            margin: auto;
            width: auto;
        }
    }
    div:nth-child(2) {
        width: 50%;
        margin: 3rem auto;
        word-wrap: normal;
        h2, p {
            margin: 1.5rem 0;
        }
        h2 {
            text-transform: uppercase;
            font-size: 1.6rem;
            line-height: 20px;
        }
        p {
           font-size: 1rem;
           line-height: 20px; 
        }
        div {
            small {
        color: #552D1E;
      }
        }
        @media screen and (max-width: 768px) {
             width: 90%;
        }
    }
`



export const VerifyButton = styled(CustomButton)`
      border-radius: 4px;  
      margin: auto;
      font-size: 1rem;
      text-transform: capitalize;
`