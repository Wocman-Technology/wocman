import styled from "styled-components";
import { CustomButton } from "../../components/custom-button/custom-button.component";

export const VerifyEmailWrapper = styled.div`
    width: 100%;
    margin: 2rem auto;
& > div {
    width: 70%;
    padding: 3rem 0;
    margin: auto;
    background: #FFFFFF;
    mix-blend-mode: normal;
    border: 0.3px solid #000000;
    border-radius: 10px;
    box-shadow: 0px 4px 26px rgba(0, 0, 0, 0.06);
    div {
        width: 100%;
        text-align: center;
        img {
            display: block;
            margin: auto;
            width: 50%;
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
    @media screen and (max-width: 768px){
        width: 100%;
    }
}
`



export const VerifyButton = styled(CustomButton)`
      border-radius: 4px;  
      margin: auto;
      font-size: 1rem;
      text-transform: capitalize;
`