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
        box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.2);
        border-radius: 4px;

        @media screen and (max-width: 768px){
          padding: 2rem 1.3rem;
          max-width: 100%;
          width: 100%;
          margin: 2rem 0;
          height: auto;
        }
        div:first-child {
          text-align: center;
          h2 {
            font-size: 1.5rem;
          }
          p {
            margin: 1rem 0;
            font-size: 0.9rem;
          }
        }
        & > div:nth-child(2) {
          @media screen and (max-width: 768px){
          padding: 1.5rem;
        }
          form {
            .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      /* Hide the browser's default checkbox */
      .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
      }

      /* Create a custom checkbox */
      .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        border-radius: 3px;
        border: 0.8px solid #552d1e;
        width: 25px;
      }

      /* On mouse-over, add a grey background color */
      .container:hover input ~ .checkmark {
        background-color: #ccc;
      }

      /* When the checkbox is checked, add a brown background */
      .container input:checked ~ .checkmark {
        background-color: #552d1e;
      }

      /* Create the checkmark/indicator (hidden when not checked) */
      .checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }

      /* Show the checkmark when checked */
      .container input:checked ~ .checkmark:after {
        display: block;
      }

      /* Style the checkmark/indicator */
      .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
      }
          }
        }
        .input-container {
          display: flex;
          flex-wrap: wrap;
          width: 100%;
          justify-content: space-between;
           @media screen and (max-width: 768px){
               justify-content: center;
               margin-bottom: 1rem;
             }
          div {
            display: flex;
            flex-wrap: nowrap;
            width: 48%;
            align-items: center;
            @media screen and (max-width: 768px){
               width: 90%;
             }
            div {
            border: 1px solid rgba(85, 45, 30, 0.4);
            border-right: 0;
            height: 40px;
            max-width: 40%;
            box-sizing: border-box;
            border-radius: 5px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            padding: 0.5rem;
            text-align: center;
            font-weight: 700;
            font-size: 0.9rem;
            color: rgba(85, 45, 30, 0.25);
            }
             input {
            display: inline-block;
            max-width: 60%;
            margin: 1.5rem 0;
            outline: none;
            padding: 0 1.2rem;
            background: #ffffff;
            border: 1px solid rgba(85, 45, 30, 0.4);
            height: 40px;
            box-sizing: border-box;
            border-radius: 5px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            color: #552D1E !important;
            font-weight: 800;
             @media screen and (max-width: 768px){
               margin: 0.9rem 0;
               max-width: 70%;
             }
          }
          }
         
        }
      `;

      export const TermsWrapper = styled.div`
        width: 70%;
        text-align: center;
        margin: auto;
        small {
          span {
            color: #552d1e;
            font-weight: 900;
          }
        }
      `

      export const AccountSetUpButton = styled(CustomButton)`
        border-radius: 6px;
        margin: 2rem auto 0;
        min-width: 15rem;
        @media screen and (max-width: 768px){
          margin: 2.7rem auto 0;
        }
      `;
