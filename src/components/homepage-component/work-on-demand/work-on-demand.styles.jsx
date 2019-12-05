import styled from 'styled-components';
import {CustomButton} from '../../custom-button/custom-button.component'


export const WorkOnDemandWrapper = styled.div`
  background-image: ${props => props.img};
  background-position: center center;
  background-repeat: no-repeat;
  object-fit: cover;
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  height: 425px;

  img {
      display: block;
      margin: 0 auto;
      margin-top: -3rem;
  }

`

export const ButtonWrapper = styled(CustomButton)`
text-transform: uppercase;
font-size: 13px;
margin: 0 auto;
margin-top: 21.5rem;
width: 250px;
`