import styled from 'styled-components';

export const ArticleWrapper = styled.article`
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: 4rem;
    margin: 8rem 0;


    &:nth-child(even) {
        div:nth-child(1) {
            order: 1;
        }
    }


    div {
        max-width: 90%;
        h5 {
            font-style: normal;
            font-weight: 600;
            font-size: 2rem;
            line-height: 54px;
            word-break: normal;
            /* identical to box height */
            align-items: center;

            color: #552D1E;
        }
        p {
            font-style: normal;
            font-weight: normal;
            word-break: normal;
            font-size: 1rem;
            line-height: 225%;
            /* or 40px */


            color: #363636;
        }
    }

    
    @media (max-width: 768px){
    grid-template-columns: 1fr;
    grid-row-gap: 3rem;
    padding: 0 1rem;    
    &:nth-child(even) {
        div:nth-child(1) {
            order: 0;
        }
    }
    div {
        text-align: center;
        max-width: 100%;

    }
    }
`

export const DivWrapper = styled.div`
  background-image: ${props => props.img};
  background-position: center center;
  background-repeat: no-repeat;
  object-fit: cover;
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  height: 305px;`