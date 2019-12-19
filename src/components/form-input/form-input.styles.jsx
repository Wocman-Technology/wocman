import styled from "styled-components";

export const InputWrapper = styled.span`
  display: block;
  margin: 0 auto 2rem auto;
  padding: 0;

  input {
    height: 45px;
    background: #FFFFFF;
    width: 100% !important;
    padding: 1rem;
    outline: none;
    /* 32% Gray Light */

    border: 1px solid #ADADAD;
    box-sizing: border-box;
    border-radius: 2px;
  }
  input::placeholder {
    display: flex;
    align-items: center;
    letter-spacing: -0.25px;

    /* 48% Gray */
  }
`;
