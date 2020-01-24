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
        div:nth-child(2) {
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
        width: 25px;
        background-color: #eee;
      }

      /* On mouse-over, add a grey background color */
      .container:hover input ~ .checkmark {
        background-color: #ccc;
      }

      /* When the checkbox is checked, add a blue background */
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
      `;

      export const TermsWrapper = styled.div`
        width: 70%;
        text-align: center;
        margin: auto;
      `

      export const AccountSetUpButton = styled(CustomButton)`
        border-radius: 6px;
        margin: 2rem auto 0;
        min-width: 300px;
      `;
