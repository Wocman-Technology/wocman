import styled, { css } from "styled-components";

const buttonStyles = css`
  background: #552d1e;
  border-radius: 2px;
  color: #ffffff;
  border: none;

  &:hover {
    background: #ffffff;
    box-shadow: 0px 5px 15px rgba(227, 184, 115, 0.3);
    color: #552d1e;
  }
`;

const invertedButtonStyles = css`
  background: #ffffff;
  box-shadow: 0px 5px 15px rgba(227, 184, 115, 0.3);
  border-radius: 2px;
  color: #552d1e;
  border: none;

  &:hover {
    background: #552d1e;
    color: #ffffff;
  }
`;

const getButtonStyles = ({ inverted }) => {
  return inverted ? invertedButtonStyles : buttonStyles;
};

export const ButtonWrapper = styled.button`
  min-width: 165px;
  width: auto;
  height: 50px;
  display: flex;
  position: relative;
  letter-spacing: 0.5px;
  line-height: 50px;
  padding: 0 35px 0 35px;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: bolder;
  cursor: pointer;
  display: flex;
  justify-content: center;
  ${getButtonStyles}
  border: ${props =>
    props.regular ? "1px solid #552D1E" : "1px solid #FFF5EE"}

`;
